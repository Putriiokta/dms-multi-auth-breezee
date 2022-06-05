<x-app-layout>
    <x-slot name="header">
        <h2 class="h4 font-weight-bold">
            {{ __('Lazada') }}
        </h2>
    </x-slot>

    <div class="card my-4">
        <div class="card-body">
            <?php var_dump($access_token); ?>
            <?php var_dump($message); ?>
            <form method="POST" action="{{ route('createproduct') }}">
                @csrf
                <x-input name="accessToken" type="hidden" value="{{ $access_token }}" />
                <x-button>
                    {{ __('Store Product') }}
                </x-button>
            </form>

            <div class="container">
                @livewire('category-select')
            </div>
</x-app-layout>
