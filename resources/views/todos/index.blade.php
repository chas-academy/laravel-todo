@extends('layouts.app')

@section('content')
    <div class="h-100 w-full flex item-center justify-center font-sans">
        <div class="bg-white rounded show p-6 m-4 w-full lg:w-3/4 lg:max-w-lg border-teal border-t-8 shadow-lg">
            @if(session()->get('success'))
                <div class="p-2 bg-indigo-darker items-center text-indigo-lightest leading-none lg:rounded-full flex lg:inline-flex" role="alert">
                    <span class="flex rounded-full bg-indigo uppercase px-2 py-1 text-xs font-bold mr-3">Success</span>
                    <span class="font-semibold mr-2 text-left flex-auto">{{ session()->get('success') }}</span>
                    <svg class="fill-current opacity-75 h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M12.95 10.707l.707-.707L8 4.343 6.586 5.757 10.828 10l-4.242 4.243L8 15.657l4.95-4.95z"/></svg>
                </div>
            @elseif($errors->any())
                @foreach($errors->all() as $error)
                <div class="bg-red-lightest border border-red-light text-red-dark px-4 py-3 rounded relative" role="alert">
                    <strong class="font-bold">Whoops, something went wrong!</strong>
                    <span class="block sm:inline">{{ $error }}</span>
                    <span class="absolute pin-t pin-b pin-r px-4 py-3">
                        <svg class="fill-current h-6 w-6 text-red" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                    </span>
                </div>
                @endforeach
            @endif
            <div class="mb-4">
                <h1 class="text-gray-darkest">Todo List</h1>
                <form class="flex mt-4" method="post" action="{{ route('todos.store') }}">
                    @csrf
                    <input name="title" class="shadow appearance-none border rounded w-full py-2 px-3 mr-4 text-grey-darker" placeholder="Add Todo">
                    <button type="submit" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Add</button>
                </form>
            </div>
            <section>
                @if(count($todos) === 0)
                    <p>All done!</p>
                @else
                    @foreach($todos as $todo)

                        @include('modal.index', ['todo' => $todo])

                        @if ($todo->completed)
                            <form class="flex mb-4 items-center border-b-2 pb-2" method="post" action="{{ route('todos.update', $todo->id) }}">
                                @csrf
                                @method('patch')
                                <input type="hidden" value="{{$todo->completed ^= $todo->completed}}" name="completed">
                                <p class="w-full line-through text-green">{{$todo->title}}</p>
                                <button type="submit" class="flex-no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-grey border-brey hover:bg-grey">Not done</button>
                                <a href="#" data-micromodal-trigger="modal-{{$todo->id}}" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Edit</a>
                                <a href="/todos/{{$todo->id}}/delete" class="flex no-shrink no-underline p-2 ml-2 border-2 rounded hover:text-white text-red border-red hover:bg-red">Remove</a>
                            </form>
                        @else
                            <form class="flex mb-4 items-center border-b-2 pb-2" method="post" action="{{ route('todos.update', $todo->id) }}">
                                @csrf
                                @method('patch')
                                <input type="hidden" value="{{!$todo->completed}}" name="completed">
                                <p class="w-full text-grey-darkest">{{$todo->title}}</p>
                                <button type="submit" class="flex no-shrink p-2 ml-4 mr-2 border-2 rounded hover:text-white text-green border-green hover:bg-green">Done</button>
                                <a href="#" data-micromodal-trigger="modal-{{$todo->id}}" class="flex-no-shrink p-2 border-2 rounded text-teal border-teal hover:text-white hover:bg-teal">Edit</a>
                                <a href="/todos/{{$todo->id}}/delete" class="flex no-shrink no-underline p-2 ml-2 border-2 rounded hover:text-white text-red border-red hover:bg-red">Remove</a>
                            </form>
                        @endif
                    @endforeach
                @endif
            </section>
        </div>
    </div>
@endsection
