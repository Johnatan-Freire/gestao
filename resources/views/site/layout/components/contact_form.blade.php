{{ $slot }}
<form action="{{ route('site.contact') }}" method="post">
    @csrf
    <div class="mx-4 my-3">
        <div class="col-12 mb-3">
            <b><label for="name"class="form-label">Nome</label></b>
            <input type="text" class="form-control" id="name" name="name" placeholder="Julia Helen Martins"
                required>
        </div>
        <div class="col-12 mb-3">
            <b><label for="email"class="form-label">E-mail</label></b>
            <input type="email" class="form-control" id="email" name="email" placeholder="juliahelen@gmail.com" required>
        </div>
        <div class="col-12 mb-3">
            <b><label for="phone"class="form-label">Telefone</label></b>
            <input type="tel" class="form-control telMask" id="phone" name="phone" placeholder="(61) 9 8653-1450" required>
            @error('phone')
                <div class="text-danger">{{ $message }}</div>
            @enderror
        </div>
        <div class="col-12 mb-3">
            <b><label for="subject"class="form-label">Assunto</label></b>
            <input type="text" class="form-control" id="subject" name="subject" placeholder="Quero adquirir o sistema" required>
        </div>
        <div class="col-12 mb-3">
            <b><label for="message"class="form-label">Mensagem</label></b>
            <textarea class="form-control messageMain" id="message" name="message" placeholder="Digite aqui sua mensagem..." required></textarea>
        </div>
        <div class="col-12"><button type="submit" class="btn btn-primary">Enviar</button></div>
    </div>
</form>
