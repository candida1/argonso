<div class="pl-lg-4">
    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="file_name">Nombre del archivo</label>
                <input type="text" id="file_name" name="file_name" class="form-control form-control-alternative"
                placeholder="Ingresar nombre de archivo"
                value="{{ old('file_name', $documents->file_name)}}">
            </div>
        </div>
    </div>


    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label for="type_document">Tipo de documento</label>
                <select name="type_document" id="type_document" class="form-control">
                    <option value="" disabled>Seleccionar el tipo de documento</option>
                    <option value="Acta de nacimiento" {{ old('type_document', $documents->type_document ?? '') == 'Acta de nacimiento' ? 'selected' : '' }}>Acta de nacimiento</option>
                    <option value="Denuncia" {{ old('type_document', $documents->type_document ?? '') == 'Denuncia' ? 'selected' : '' }}>Denuncia</option>
                    <option value="Padron electoral" {{ old('type_document', $documents->type_document ?? '') == 'Padron electoral' ? 'selected' : '' }}>Padron electoral</option>
                    <option value="Licencia de conducir" {{ old('type_document', $documents->type_document ?? '') == 'Licencia de conducir' ? 'selected' : '' }}>Licencia de conducir</option>
                </select>
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="date_compleiton">Fecha de realización</label>
                <input type="date" id="date_compleiton" name="date_compleiton" class="form-control form-control-alternative"
                placeholder="Ingresar la fecha de realización"
                value="{{ old('date_compleiton', $documents->date_compleiton)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="description">Descripción</label>
                <input type="text" id="description" name="description" class="form-control form-control-alternative"
                placeholder="Ingresar descripción del documento"
                value="{{ old('descripton', $documents->description)}}">
            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="observation">Observaciones</label>
                <input type="number" id="observation" name="observation" class="form-control form-control-alternative"
                placeholder="Ingrese su observación"
                value="{{ old('observation', $documents->observation)}}">
            </div>
        </div>
    </div>

     <div class="row">
        <div class="col-lg-6">
            <div class="form-group">
                <label class="form-control-label" for="file_path">Ruta de archivo</label>
                <input type="text" id="file_path" name="file_path" class="form-control form-control-alternative"
                placeholder="Ingrese su ruta de archivo"
                value="{{ old('file_path', $documents->file_path)}}">
            </div>
        </div>
    </div>


</div>

<hr class="my-4"/>



<div class="pl-lg-4">
    <div class="form-group">
        <button type="submit" class="btn btn-primary">
            <i class="fas fa-save"></i> Guardar Documento
        </button>
    </div>
</div>

