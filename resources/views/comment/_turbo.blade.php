<turbo-stream action="append" target="commentsList">
    <template>
        @include('comment.view', ['comment' => $comment])
    </template>
</turbo-stream>