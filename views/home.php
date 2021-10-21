<?php include_once 'header.php' ?>

    <div class="md:container md:mx-auto px-4">

        <div class="max-w-4xl mx-auto my-4 overflow-hidden bg-indigo-900 rounded-lg">
            <div class="p-4">
                <p class="text-2xl text-gray-100">Tasks</p>
            </div>
        </div>

        <div class="max-w-4xl mx-auto my-4 overflow-hidden bg-white rounded-lg shadow-md">
            <h1 class="w-full bg-indigo-300 h-16 text-center py-5">Inject after</h1>

            <div class="p-6 bg-indigo-50">
                <div class="my-2">
                    <span class="text-xs font-medium text-indigo-600 uppercase">Description</span>
                    <p class="mt-2 text-sm text-gray-600">
                        Create a PHP function called injectAfter(array $array, string $afterKey, string $newKey, mixed $newValue), which inserts a new key/value pair into an associative array at a specific position, i.e. after a specific key.<br />
                        If the $afterKey does not exist, the new key/value should be inserted at the end of the array<br />
                        If the $newKey already exists in the input array it should be moved to the correct position (and, of course, set to the new values as well)
                    </p>
                </div>

                <div class="my-4">
                    <span class="text-xs font-medium text-indigo-600 uppercase">Result</span>
                    <div class="mt-2 text-sm text-gray-600">
                        <p>Init array: <?php print_r(INIT_ARRAY) ?></p>
                        <p>Inject after key: <?= AFTER_KEY ?></p>
                        <p>New key: <?= NEW_KEY ?></p>
                        <p>New value: <?= NEW_VALUE ?></p>
                        <p class="pt-4">Injected array: <?php print_r($inject) ?></p>
                    </div>
                </div>

            </div>
        </div>

        <div class="max-w-4xl mx-auto my-4 overflow-hidden bg-white rounded-lg shadow-md">
            <h1 class="w-full bg-indigo-300 h-16 text-center py-5">The "Seven-segment display" riddle</h1>

            <div class="p-6 bg-indigo-50">
                <div class="my-2">
                    <span class="text-xs font-medium text-indigo-600 uppercase">Description</span>
                    <p class="mt-2 text-sm text-gray-600">Imagine a <a href="https://en.wikipedia.org/wiki/Seven-segment_display" class="text-indigo-600 hover:text-indigo-900" target="_blank">seven-segment display</a> used for a digital alarm clock. The clock has 4 seven-segment displays and is displaying times in 24-hour-format, so from 00:00 to 23:59.
                        Every segment of every display is powered by a single LED (so the clock has a total of 4x7 = 28 LEDs) and every LED uses the same amount of power. This means that the least amount of power is used at 11:11, because only 8 LEDs (2 for each digit) are lit up.
                        Your task: Write a script to programmatically determine the time at which the most amount of power is used by the clock. Only valid times are allowed (so 23:88 is not a valid time, for example).You can choose either PHP or JavaScript for Part 2.
                    </p>
                </div>

                <div class="my-4">
                    <span class="text-xs font-medium text-indigo-600 uppercase">Result</span>
                    <div class="mt-2 text-sm text-gray-600">
                        <p>Clock consume max power amount at
                            <span>
                                <?= $display['hours'] ?> : <?= $display['minutes'] ?>
                                (<?= $display['totalSegments'] ?> LEDs on!)
                            </span>
                        </p>
                    </div>
                </div>

            </div>
        </div>

        <div class="max-w-4xl mx-auto my-4 overflow-hidden bg-indigo-900 rounded-lg">
            <div class="p-4 flex justify-between">
                <p class="text-sm text-gray-100">This tasks are completed as a coding challenge.</p>
                <p class="text-sm text-gray-100 text-right">Author: Darko Dujin, 2021.</p>
            </div>
        </div>

    </div>

<?php include_once 'footer.php' ?>