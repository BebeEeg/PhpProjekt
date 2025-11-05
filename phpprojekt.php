
<?php


/*******************************************************
 * Author: Bebe Egerton <bebeegerton14@gmail.com>
 * Released: 05.11.2025
 *******************************************************
 * Checkliste der Anforderungen
 *   Dateisystem verwenden (optional)
 *   Typenfunktionen verwenden
 *   Reguläre Ausdrücke verwenden (optional)
 *   UDF verwenden
 *   Konstrukte zur Iteration und Selektion verwenden
 *******************************************************
 * Time plan:
 *   Research and planning: 1 1/2 hours
 *   Understanding functions from the tutorials: 1/2 hour
 *   Coding: 4 hours
 *   Testing and debugging: ~2 hour
 *******************************************************/


/* Read a line from STDIN with a prompt, retrying if empty.
 Uses type hints and a recursive retry for empty input.
 get_input STDIN is getting the keyboard input */

function get_input(string $prompt): string
{
    echo $prompt . ' ';
    $line = trim(fgets(STDIN));
    return $line === '' ? get_input($prompt) : $line;
}

/* Present a question with said choices and return the chosen key. (ask_question)
EnsuresMakes sure uppercase answer and validates against available keys.
The REGEX ensures single-letter input and tells you if its valid or not*/
function ask_question(string $question, array $choices): string
{
    echo PHP_EOL . $question . PHP_EOL;
    foreach ($choices as $key => $text) {
        echo "  [$key] $text" . PHP_EOL;
    }

    $answerRaw = get_input("Your choice (enter the letter):");
    $answer = strtoupper($answerRaw);

    /* REGEX: it says your input is invalid and
  asks the same question again, thats what the "return" is for */

    if (!preg_match('/^[A-E]$/', $answer)) {
        print "Invalid input format. Please enter a single letter A-E." . PHP_EOL;
        return ask_question($question, $choices);
    }
    // If the answer ISNT valid, aka through the "array_key_exists", it asks again.
    if (!array_key_exists($answer, $choices)) {
        //Instead of listing the choices manually, I make the code do it with however many choices i have.
        print "Please enter one of: " . implode(', ', array_keys($choices)) . PHP_EOL;
        return ask_question($question, $choices);
    }
    return $answer;
}

/* Determine which animal matches the highest score. sorts the score array in top
to bottom order and picks the top key. it makes human-friendly messages*/
function determine_animal(array $score): string
{
    arsort($score);
    $top = array_key_first($score);
    $map = [
        'dog' => "You're a Dog — loyal and friendly!",
        'tiger' => "You're a Cat — independent and curious!",
        'fox' => "You're a Fox — clever and playful!",
        'elephant' => "You're an Elephant — calm and wise!",
        'meerkat' => "You're a Meerkat — social and vigilant!",
        'bear' => "You're a Bear — strong and innovitive!",
    ];
    return $map[$top] ?? "You're something uniquely you twin and noone can take that away from you <3";
}
/*This was probably the hardest part: finding out with way i should do this part.
 Id done something similar in aufgabe 2.5 and 2.6 but this looks far cleaner.In my
 humble opininon, even if it took a few tutorials w3 school to figure it out its
 basically the questions and what question is what animal*/
$questions = [
    [
        'q' => "What's your ideal weekend?",
        'c' => [
            'A' => ['text' => "hanging out with friends", 'animal' => 'Meerkat'],
            'B' => ['text' => "taking a nap", 'animal' => 'tiger'],
            'C' => ['text' => "going to the arcade", 'animal' => 'bear'],
            'D' => ['text' => "hiking", 'animal' => 'dog'],
            'E' => ['text' => "Exploring a new place", 'animal' => 'fox'],
            'F' => ['text' => "reading a book", 'animal' => 'elephant'],
        ]
    ],
    [
        'q' => "Which trait describes you best?",
        'c' => [
            'A' => ['text' => "Patient", 'animal' => 'elephant'],
            'B' => ['text' => "Independent", 'animal' => 'tiger'],
            'C' => ['text' => "playful", 'animal' => 'Meerkat'],
            'D' => ['text' => "Curious", 'animal' => 'fox'],
            'E' => ['text' => "Loyal", 'animal' => 'dog'],
            'F' => ['text' => "Clever", 'animal' => 'bear']
        ]
    ],
    [
        'q' => "Pick a favorite snack:",
        'c' => [
            'A' => ['text' => "Something chewy", 'animal' => 'dog'],
            'B' => ['text' => "Something light and quick", 'animal' => 'tiger'],
            'C' => ['text' => "Something adventurous", 'animal' => 'fox'],
            'D' => ['text' => "Something substantial", 'animal' => 'elephant'],
            'E' => ['text' => "Something sweet", 'animal' => 'bear'],
            'F' => ['text' => "Something a little cruntchy", 'animal' => 'meerkat']
        ]
    ],
    [
        'q' => "Where would you wan to go?",
        'c' => [
            'A' => ['text' => "A park", 'animal' => 'dog'],
            'B' => ['text' => "A cozy cafe", 'animal' => 'bear'],
            'B' => ['text' => "I'd rather stay at home", 'animal' => 'tiger'],
            'C' => ['text' => "oak forest", 'animal' => 'fox'],
            'D' => ['text' => "the savanna", 'animal' => 'elephant'],
            'E' => ['text' => "the desert", 'animal' => 'meerkat']
        ]
    ],
    [
        'q' => "What's your favorite time of day?",
        'c' => [
            'A' => ['text' => "Morning", 'animal' => 'elephant'],
            'B' => ['text' => "Afternoon", 'animal' => 'dog'],
            'C' => ['text' => "Evening", 'animal' => 'fox'],
            'D' => ['text' => "Night", 'animal' => 'tiger'],
            'B' => ['text' => "Dusk", 'animal' => 'bear'],
            'E' => ['text' => "Dawn", 'animal' => 'meerkat']
        ]
    ],
    [
        'q' => "Choose a hobby:",
        'c' => [
            'A' => ['text' => "Playing sports", 'animal' => 'dog'],
            'B' => ['text' => "Reading", 'animal' => 'elephant'],
            'C' => ['text' => "Exploring nature", 'animal' => 'fox'],
            'D' => ['text' => "Watching movies", 'animal' => 'tiger'],
            'E' => ['text' => "Socializing", 'animal' => 'meerkat'],
            'F' => ['text' => "Solving puzzles", 'animal' => 'bear']
        ]
    ],
    [
        'q' => "What's your favorite type of music?",
        'c' => [
            'A' => ['text' => "Pop", 'animal' => 'meerkat'],
            'B' => ['text' => "Classical", 'animal' => 'elephant'],
            'C' => ['text' => "Rock", 'animal' => 'bear'],
            'D' => ['text' => "Jazz", 'animal' => 'fox'],
            'E' => ['text' => "Country", 'animal' => 'dog'],
            'F' => ['text' => "Hip-hop", 'animal' => 'tiger']
        ]
    ],
];

// Counting the scores
$score = ['dog' => 0, 'cat' => 0, 'fox' => 0, 'elephant' => 0];

echo "What animal are you? (Quiz)" . PHP_EOL;

//rins through each time a question is answered
foreach ($questions as $i => $qdata) {
    /* build a simple letter => text map for ask_question. I got this from a tutorial.
     I cant comprehend text maps that well */
    $choices = [];
    foreach ($qdata['c'] as $letter => $opt) {
        $choices[$letter] = $opt['text'];
    }
    //adding it to the data so that it can calculate it in the end
    $answer = ask_question(($i + 1) . ". " . $qdata['q'], $choices);

    /* adding the corresponding animal score if valid (this bit was tricky to
    figure out, without w3school i think i wouldnt have been able to do it)*/
    $animal = $qdata['c'][$answer]['animal'] ?? null;
    if ($animal !== null && array_key_exists($animal, $score)) {
        $score[$animal]++;
    }
}
//self explannitory
echo PHP_EOL . "Calculating your result..." . PHP_EOL;
echo PHP_EOL . determine_animal($score) . PHP_EOL;
