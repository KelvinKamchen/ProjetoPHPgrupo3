@include('layouts.app')

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">
                    Edit {{ $todo->title }}
                </div>
                <h5 class="card-header">
                    <a href="{{ route('todo.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
                </h5>

                    <h5 class="card-header bg-gray-50">
                        <a href="{{ route('todo.index') }}" class="btn btn-sm btn-outline-primary"><i class="fa fa-arrow-left"></i> Voltar</a>
                    </h5>

                    <div class="card-body mx-2">

                        @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session()->has('success'))
                            <div class="alert alert-success">
                                <button type="button" class="close" data-dismiss="alert">×</button>
                                {{ session()->get('success') }}
                            </div>
                        @endif

                        <div class="form-group row">
                            <label for="title" class="col-form-label text-md-right">Tarefa</label>

                            <div class="form-group row">
                                <label for="title" class="col-form-label text-md-right">Título</label>

                                    <input id="title" type="title" class="form-control @error('title') is-invalid @enderror" name="title" value="{{ $todo->title }}" required autocomplete="title" autofocus>

                        <div class="form-group row">
                            <label for="description" class="col-form-label text-md-right">Descrição</label>

                            <div class="form-group row">
                                <label for="description" class="col-form-label text-md-right">Descrição</label>

                                @error('Descrição')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                        </div>
                        <div class="form-group row">
                            <label for="people" class="col-form-label text-md-right">Pessoas</label>

                            <input id="people" type="people" class="form-control @error('people') is-invalid @enderror" name="people" value="{{ $todo->people }}" required autocomplete="pessoas" autofocus>

                            @error('people')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                        </div>
                        <div class="form-group row">
                            <div class="">
                                <div class="form-check">
                                    @if ($todo->completed)
                                        <input class="form-check-input" type="checkbox" name="completed" id="completed" value="{{ $todo->completed }}" checked>
                                    @else
                                        <input class="form-check-input" type="checkbox" name="completed" id="completed" value="{{ $todo->completed }}">
                                    @endif

                                    <label class="form-check-label" for="completed">
                                        Terminada?
                                    </label>
                                </div>
                            </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-8 offset-md-4">
                                <button type="submit" class="btn btn-success">
                                    Salvar
                                </button>
                            </div>
                        </form>
                        
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

