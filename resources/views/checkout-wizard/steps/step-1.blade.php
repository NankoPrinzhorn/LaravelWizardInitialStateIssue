<div class="p-4">
    Step 1 -> A random "id" from the url is used, plus a text from the input field. Fill in the text field and continue.

    <br>
    <br>

    ID from url: {{ $this->number }}<br>
    <input type="text" name="text" id="text" wire:model="stepText" class="border"  placeholder="type here...">
    @error('stepText')
    <div class="text-xs text-red-600 font-normal">
        {{ $message }}
    </div>
    @enderror

    <br>
    <br>

    <div wire:click="nextStep" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-100 text-center">
        Go to the next step
    </div>
</div>
