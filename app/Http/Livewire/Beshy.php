<?php

namespace App\Http\Livewire;

use Livewire\Component;

class Beshy extends Component
{
    public $text1 = '';
    public $text2 = '';
    public $selectedEmoji = '🤸';
    public $popularEmojis = [
        '🤸','😄', '❤️', '🔥', '🌟', '🎉', '👍', '👏', '🙌', '😊', '🥳','😋','💯','🐵','🌈','🍆'
    ];
    public function render()
    {
        return view('livewire.beshy', [
            'text1' => $this->text1,
            'text2' => $this->text2,
        ]);
    }

    public function submitText()
    {
        $this->text2 = str_replace(' ', $this->selectedEmoji, $this->text1);
    }
}
