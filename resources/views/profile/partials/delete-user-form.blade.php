<section class="mb-5">
    <header>
        <h2 class="h4 text-dark">
            {{ __('Deletar conta') }}
        </h2>

        <p class="mt-1 text-muted">
            {{ __('
Depois que sua conta for excluída, todos os seus recursos e dados serão excluídos permanentemente. ') }}
        </p>
    </header>

    <button class="btn btn-danger" data-bs-toggle="modal" data-bs-target="#confirmUserDeletionModal">
        {{ __('Deletar conta') }}
    </button>

    <div class="modal fade" id="confirmUserDeletionModal" tabindex="-1" aria-labelledby="confirmUserDeletionLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="post" action="{{ route('profile.destroy') }}">
                    @csrf
                    @method('delete')

                    <div class="modal-header">
                        <h5 class="modal-title" id="confirmUserDeletionLabel">{{ __('Você realmente quer excluir sua conta?') }}</h5>
                        <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                    </div>

                    <div class="modal-body">
                        <p class="text-muted">
                            {{ __('Após deletar sua conta todos os dados pertencentes a esta conta serão removidos.') }}
                        </p>

                        <div class="mb-3">
                            <label for="password" class="form-label sr-only">{{ __('Senha') }}</label>
                            <input id="password" name="password" type="password" class="form-control" placeholder="{{ __('Senha') }}">
                            @if ($errors->userDeletion->get('password'))
                                <div class="text-danger mt-2">
                                    {{ $errors->userDeletion->first('password') }}
                                </div>
                            @endif
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">{{ __('Cancelar') }}</button>
                        <button type="submit" class="btn btn-danger ms-2">{{ __('Deletar conta') }}</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
