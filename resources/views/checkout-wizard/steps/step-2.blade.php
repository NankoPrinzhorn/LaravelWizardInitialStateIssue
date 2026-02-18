<div class="p-4">
    Step 2 -> Here you see a json encoded string of all the data from step 1. <br>
    Now when you click "Go to the next step", an error will show, that $stepText is no longer defined

    <br>
    <br>

    Data from step 1: {{ json_encode($this->state()->getStep1Data()) }}

    <br>
    <br>

    <div wire:click="previousStep" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-100 text-center">
        Go to the previous step
    </div>
    <br>
    <div wire:click="nextStep" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded w-100 text-center">
        Go to the next step
    </div>
</div>
