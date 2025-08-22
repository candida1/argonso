<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="name">Nombre completo</label>
                <input type="text" id="name" name="name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre del Cliente"
                value="{{ old('name', $customers->name)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="lastname">Apellido</label>
                <input type="text" id="lastname" name="lastname" class="form-control form-control-alternative"
                placeholder="Ingresar el apellido del cliente"
                value="{{ old('lastname', $customers->lastname)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="gender">Género</label>
                <input type="text" id="gender" name="gender" class="form-control form-control-alternative"
                placeholder="Ingresar el género"
                value="{{ old('gender', $customers->gender)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="identity_card">Cedula de identidad</label>
                <input type="text" id="identity_card" name="identity_card" class="form-control form-control-alternative"
                placeholder="Ingresar cédula de identidad"
                value="{{ old('identity_card', $customers->identity_card)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="telephone">Número telfonico</label>
                <input type="number" id="telephone" name="telephone" class="form-control form-control-alternative"
                placeholder="Ingrese su número telefonico"
                value="{{ old('telephone', $customers->telephone)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="address">Dirección</label>
                <input type="text" id="address" name="address" class="form-control form-control-alternative"
                placeholder="Ingrese su dirección"
                value="{{ old('address', $customers->address)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="email">Correo electrónico</label>
                <input type="text" id="email" name="email" class="form-control form-control-alternative"
                placeholder="Ingrese su córreo electrónico"
                value="{{ old('email', $customers->email)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="registration_date">Fecha de registro</label>
                <input type="date" id="registration_date" name="registration_date" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de registro"
                value="{{ old('registration_date', $customers->registration_date)}}">
            </div>
        </div>
    </div>


</div>

<hr class="my-4"/>

<h6 class="heading-small text-muted mb-4">Guardar</h6>

<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i>Guardar Cliente
        </button>
    </div>
</div>

