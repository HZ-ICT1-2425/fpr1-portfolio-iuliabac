<?php

namespace Database\Seeders;

use App\Models\Post;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class PostSeeder extends Seeder
{

    private $data = [
        [
            'title' => 'Study Choice',
            'slug' => 'Why did I choose this study?',
            'body' => 'If you have read my profile page, you know that I want to do data management in the future.
            Because My parents thought of me becoming one and
            I got interested on the subject. A data manager is
            someone who collects and rearranges data in a specific order, so that it world be easier for others.'
        ],

        [
            'title' => 'Personal SWOT analysis',
            'slug' => 'Strengths, Weaknesses, Opportunities, Threats',
            'body' => "<p>Strengths: Understanding, fast learner, good listener,
can solve most problems without any help</p>
    <p>Weaknesses: Writing</p>
    <p>Opportunities: Organization, Ideas</p>
    <p>Threats: discrimination because of a learning disability</p>"
        ],

        [
            'title' => 'Programming experience',
            'slug' => 'Spoiler alert: not too much',
            'body' => "The first time I ever learned programing was in 7th grade, on HTML.
            All of our stuff were coded using, NOTEPAD? yes, thats right!
            all of the coding in middle school were on notepad.
            Then in High School, I used python for Computer Science classes,
            however we didn't use that much...
            Right now, I am rediscovering this thing called
            'Programming' and all of this is made using 'Visual Studio Code',
            and let me tell you. It's much more easier than using notepad that's for sure!"
        ],

        [
            'title' => 'First feedback',
            'slug' => "It's like im being feed",
            'body' => "My colleges really liked the nostalgic
            aesthetic that I have going on with the site
            (e.g: Old-school GIFs and the amateurish coding).
            However all of my files were not organised as it was intended.
            all of the were in one folder and the files were all
            hosted on github instead of the projects folder.
            and all of my pictures were from the internet
            and the link redirected to the website,
            that is a bad thing because the web pictures
            can get deleted and won't be able to see it.
            so instead I organised my folders, downloaded
            my Pictures and have everything well organised and well done!"
        ],
    ];

    /**
     * run database seed
     */
    public function run(): void
    {
        foreach ($this->data as $item) {
            Post::create($item);
        }
    }
}
