<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del Abogado"
                value="{{ old('name', $lawyers->name)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="lastname">Apellido</label>
                <input type="text" id="lastname" name="lastname" class="form-control form-control-alternative"
                placeholder="Ingresar el apellido del abogado"
                value="{{ old('lastname', $lawyers->lastname)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender">Género</label>
                <input type="text" id="gender" name="gender" class="form-control form-control-alternative"
                placeholder="Ingresar el género"
                value="{{ old('gender', $lawyers->gender)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identity_card">Cedula de identidad</label>
                <input type="text" id="identity_card" name="identity_card" class="form-control form-control-alternative"
                placeholder="Ingresar cédula de identidad"
                value="{{ old('identity_card', $lawyers->identity_card)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Número telfonico</label>
                <input type="string" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingrese su número telefonico"
                value="{{ old('telephone', $lawyers->telephone)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingrese su dirección"
                value="{{ old('address', $lawyers->address)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo electrónico</label>
                <input type="text" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Ingrese su córreo electrónico"
                value="{{ old('email', $lawyers->email)}}">
            </div>
        </div>
    </div>


</div>

<hr class="my-4"/>



<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Abogado
        </button>
    </div>
</div>
