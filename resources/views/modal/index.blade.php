  <div class="modal micromodal-slide" id="modal-{{$todo->id}}" aria-hidden="true">
    <div class="modal__overlay" tabindex="-1" data-micromodal-close>
      <form class="modal__container" role="dialog" aria-modal="true" aria-labelledby="modal-{{$todo->id}}-title" method="post" action="{{ route('todos.update', $todo)}}">
        @csrf
        @method('patch')
        <header class="modal__header">
          <h2 class="modal__title" id="modal-{{$todo->id}}-title">
            Edit todo
          </h2>
          <button class="modal__close" aria-label="Close modal" data-micromodal-close></button>
        </header>
        <main class="modal__content" id="modal-{{$todo->id}}-content">
          <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" value="{{$todo->title}}">
        </main>
        <footer class="modal__footer">
          <button type="submit" class="modal__btn modal__btn-primary">Save</button>
          <button class="modal__btn" data-micromodal-close aria-label="Close this dialog window">Close</button>
        </footer>
      </form>
    </div>
  </div>