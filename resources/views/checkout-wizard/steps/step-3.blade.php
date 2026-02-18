<div class="p-4">
    Step 3

    <br>
    <br>

    Data from step 1: {{ json_encode($this->state()->getStep1Data()) }}

    <br>
    <br>

    <div wire:click="previousStep" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-100 text-center">
        Go to the previous step
    </div>
    <br>
</div>
