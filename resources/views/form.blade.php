
    <div class="form-row">
      <div class="col-md-6 mb-3">
      <label for="validationTooltip01">ФИО</label>
      <input type="text" name="FIO" class="form-control" id="validationTooltip01" required value=@if($layout == 'edit') {{ $ed_cont->fullname }} @else 'Марк' @endif >
        <div class="valid-tooltip">
        Введите ФИО!
        </div>
      </div>
      <div class="col-md-6 mb-3">
        <label for="validationTooltip02">Компания</label>
        <input type="text" name="COMPANY" class="form-control" id="validationTooltip02"  required value=@if($layout == 'edit') {{ $ed_cont->company }} @else 'Отто' @endif>
          <div class="valid-tooltip">
              Введите названия компании!
          </div>
      </div>
    </div>
    <div class="form-row">
        <div class="col-md-6 mb-3">
          <label for="validationTooltip03">Должность</label>
          <input type="text" name="SPECIALITY" class="form-control" id="validationTooltip03" required value=@if($layout == 'edit') {{ $ed_cont->speciality }} @else 'Водитель' @endif >
          <div class="invalid-tooltip">
            Введите должность!
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationTooltip04">Мобильный телефон</label>
          <input type="text" name="MOB_TEL" class="form-control" id="validationTooltip04" required value=@if($layout == 'edit') {{ $ed_cont->mob_tel }} @else '+992927771122' @endif >
          <div class="invalid-tooltip">
            Введите номер телефона.
          </div>
        </div>
        <div class="col-md-3 mb-3">
          <label for="validationTooltip05">E-mail</label>
            <input type="text" name="EMAIL" class="form-control" id="validationTooltip05" required value=@if($layout == 'edit') {{ $ed_cont->email }} @else 'test@test.ru' @endif >
            <div class="invalid-tooltip">
              Введите адресс электронной почты.
            </div>
        </div>

          <div class="col-md-3 mb-3">
            <label for="validationTooltip06">Группа</label>
              <select name="GROUPE" class="custom-select" required id="validationTooltip06"  >
                @if($layout == 'edit') <option>{{ $ed_cont->groupe }}</option> @else
                <option selected disabled value="">Выберите группу...</option> @endif
                <option>Родные</option>
                <option>Одноклассники</option>
                <option>Однокурсники</option>
                <option>Коллеги по работе</option>
                <option>Разное</option>
              </select>
              <div class="invalid-tooltip">
                Выберите данные из группы.
              </div>
          </div>
  </div>
  <div class="form-group">
    <div class="form-check">
      <input class="form-check-input" type="checkbox" value="" required id="invalidCheck2" >
      <label class="form-check-label" for="invalidCheck2">
        Все правильно!
      </label>
    </div>
  </div>
  <button class="btn btn-primary" type="submit">Сохранить данные</button>
