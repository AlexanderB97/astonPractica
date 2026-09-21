<?php

use Livewire\Component;

new class extends Component
{
    public string $email = '';

    public string $password = '';

    public bool $remember = false;

    /**
     * Recupera lo que el usuario había escrito si Fortify lo devolvió con un error.
     */
    public function mount(): void
    {
        $this->email = old('email', '');
        $this->remember = (bool) old('remember');
    }

    protected function rules(): array
    {
        return [
            'email' => ['required', 'email'],
            'password' => ['required'],
        ];
    }

    /**
     * Se ejecuta cada vez que una propiedad cambia desde el navegador.
     */
    public function updated(string $property): void
    {
        if (array_key_exists($property, $this->rules())) {
            $this->validateOnly($property);
        }
    }
};
?>

<form method="POST" action="{{ route('login.store') }}" novalidate x-data="{ submitting: false }" x-on:submit="submitting = true" class="flex flex-col gap-6">
    @csrf

    <flux:input
        wire:model.live.blur="email"
        name="email"
        :label="__('Email address')"
        type="email"
        autofocus
        autocomplete="email"
        placeholder="email@example.com"
    />

    <div class="relative">
        <flux:input
            wire:model.live.blur="password"
            name="password"
            :label="__('Password')"
            type="password"
            autocomplete="current-password"
            :placeholder="__('Password')"
            viewable
        />

        @if (Route::has('password.request'))
            <flux:link class="absolute top-0 text-sm end-0" :href="route('password.request')" wire:navigate>
                {{ __('Forgot your password?') }}
            </flux:link>
        @endif
    </div>

    <flux:checkbox wire:model="remember" name="remember" :label="__('Remember me')" />

    <div class="flex items-center justify-end">
        <flux:button variant="primary" type="submit" class="w-full" x-bind:disabled="submitting" data-test="login-button">
            <span x-show="!submitting">{{ __('Log in') }}</span><span x-show="submitting" x-cloak>{{ __('Logging in...') }}</span>
        </flux:button>
    </div>
</form>
