<div class="flex flex-col gap-6">
    <x-auth-header :title="__('Crear cuenta')" :description="__('Ingrese los datos necesarios.')" />

    <!-- Session Status -->
    <x-auth-session-status class="text-center" :status="session('status')" />

    <form wire:submit="register" class="flex flex-col gap-6">
        <!-- Name -->
        <flux:input
            wire:model="name"
            :label="__('Nombre')"
            type="text"
            required
            autofocus
            autocomplete="name"
            :placeholder="__('Nombre completo')"
        />

        <!-- Email Address -->
        <flux:input
            wire:model="email"
            :label="__('Email')"
            type="email"
            required
            autocomplete="email"
            placeholder="email@example.com"
        />
        <!--horarios -->
        <flux:input
            wire:model="hora"
            :label="__('Horario')"
            type="text"
            required
            autocomplete="Horario"
            placeholder="9-6"
        />
        <!-- dias -->
        <flux:input
            wire:model="dia"
            :label="__('Dias laborables')"
            type="text"
            required
            autocomplete="dia"
            placeholder="L-V"
        />

        <!-- Password -->
        <flux:input
            wire:model="password"
            :label="__('Password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Password')"
            viewable
        />

        <!-- Confirm Password -->
        <flux:input
            wire:model="password_confirmation"
            :label="__('Confirmar password')"
            type="password"
            required
            autocomplete="new-password"
            :placeholder="__('Confirmar password')"
            viewable
        />

        <div class="flex items-center justify-end">
            <flux:button type="submit" variant="primary" class="w-full">
                {{ __('Crear cuenta') }}
            </flux:button>
        </div>
    </form>

    <div class="space-x-1 rtl:space-x-reverse text-center text-sm text-zinc-600 dark:text-zinc-400">
        <span>{{ __('Ya estas registrado?') }}</span>
        <flux:link :href="route('login')" wire:navigate>{{ __('Log in') }}</flux:link>
    </div>
</div>
