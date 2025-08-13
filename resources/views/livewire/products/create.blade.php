<div>
   <form wire:submit='save' class="space-y-4 max-w-2xl p-4 bg-surface-alt dark:bg-surface-dark-alt rounded-lg shadow-md">
        <x-form.input wire:model="form.name" label="Nombre" name="form.name" placeholder="Ingrese producto"/>
        <x-form.input wire:model="form.stock" label="Stock" name="form.stock" placeholder="Ingrese Stock"/>
        <x-form.input wire:model="form.price" label="Precio" name="form.price" placeholder="Ingrese Precio"/>
        <div  class="flex w-full max-w-md flex-col gap-1 text-on-surface dark:text-on-surface-dark">
            <label for="description" class="w-fit pl-0.5 text-sm">Descripción</label>
            <textarea wire:model="form.description" id="description" class="w-full rounded-radius border border-outline bg-surface-alt px-2.5 py-2 text-sm focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary disabled:cursor-not-allowed disabled:opacity-75 dark:border-outline-dark dark:bg-surface-dark-alt/50 dark:focus-visible:outline-primary-dark" rows="3" placeholder="Descripcion de producto"></textarea>
        </div>
        <button type="submit" class="whitespace-nowrap rounded-radius bg-primary border border-primary px-4 py-2 text-sm font-medium tracking-wide text-on-primary transition hover:opacity-75 text-center focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-primary active:opacity-100 active:outline-offset-0 disabled:opacity-75 disabled:cursor-not-allowed dark:bg-primary-dark dark:border-primary-dark dark:text-on-primary-dark dark:focus-visible:outline-primary-dark">
            {{request()->routeIs('products.create') ? 'Crear producto' : 'Editar producto'}}
        </button>
   </form>
</div>
