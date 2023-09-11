<?php

namespace App\Http\Livewire;

use App\Models\Comment;
use Livewire\Attributes\Rule;
use Livewire\Component;
use Livewire\WithPagination;
use Livewire\WithFileUploads;

class Comments extends Component
{
    use WithPagination;
    use WithFileUploads;
    public $newComment;

    public $ticketId = 1;

    protected $listeners = [
        'fileUpload'     => 'handleFileUpload',
        'ticketSelected',
    ];

    public function ticketSelected($ticketId)
    {
        $this->ticketId = $ticketId;
    }

    // realtime validation
    public function updated($field)
    {
        $this->validateOnly($field, ['newComment' => 'required|max:255']);
    }

    /**
     * Summary of addComment function
     * @return void
     */
    public function addComment()
    {

        // empty form submission validation
        $this->validate(['newComment' => 'required|max:255']);

        // add created comment to database
        $createdComment = Comment::create([
            'body' => $this->newComment,
            'user_id' => 1,
            'support_ticket_id' => $this->ticketId,
        ]);

        // Clear input box after add button is clicked
        $this->newComment = '';


        // flash message for successful entry
        session()->flash('success_message', 'Comment created successfully :)');
    }

    // delete comment from database
    public function remove($commentID)
    {
        $comment = Comment::find($commentID);
        $comment->delete();

        // flash message for successful delete
        session()->flash('delete_message', 'Comment deleted successfully :)');
    }



    public function render()
    {
        return view('livewire.comments', [
            'comments' => Comment::where('support_ticket_id', $this->ticketId)->latest()->paginate(2)
        ]);
    }
}
