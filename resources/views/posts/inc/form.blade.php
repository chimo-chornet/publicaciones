<x-session-status class="mb-4" :status="session('status')" />
<x-validation-errors class="mb-4" :errors="$errors" />

    <form action="{{route('posts.store')}}" method="POST" >
     @csrf
        <div class="mt-4">
            <x-input-label for="body" :value="__('Body')" />
            <x-textarea class="block mt-1 w-full" id="body" name="body"  />
        </div>

        <div class="flex justify-end mt-4">
           <x-primary-button>
               {{ __('Save') }}
           </x-primary-button>
        </div>
    </form>