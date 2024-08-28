<x-app-layout>
    <div class="container py-5">
        <div class="row justify-content-center">
            <div class="col-12 col-md-10 col-lg-8 space-y-4">
                <!-- Formulário de Atualização de Perfil -->
                <div class="p-4 mb-4 bg-white shadow rounded">
                    <div class="w-100">
                        @include('profile.partials.update-profile-information-form')
                    </div>
                </div>
    
                <!-- Formulário de Atualização de Senha -->
                <div class="p-4 mb-4 bg-white shadow rounded">
                    <div class="w-100">
                        @include('profile.partials.update-password-form')
                    </div>
                </div>
    
                <!-- Formulário de Exclusão de Conta -->
                <div class="p-4 bg-white shadow rounded">
                    <div class="w-100">
                        @include('profile.partials.delete-user-form')
                    </div>
                </div>
            </div>
        </div>
    </div>
    @include('layouts.footer')
</x-app-layout>
