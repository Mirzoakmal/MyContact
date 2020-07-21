
<div class="p-4">
<table class="table table-bordered table-striped">
  <thead>
    <tr>
      <th style="width: 150px;">id</th>
      <th>Полное имя</th>
      <th>Компания</th>
      <th>Должность</th>
      <th>Моб. телефон</th>
      <th>E-mail</th>
      <th>Группа</th>
    </tr>
  </thead>
  <tbody>
    @foreach($spis_cont as $contact)
    <tr>
      <td>

      <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal{{ $contact->id }}" >
          {{ $contact->id }}
      </button>
        @include("mod_okno")

      </td>
      <td>{{ $contact->fullname }}</td>
      <td>{{ $contact->company }}</td>
      <td>{{ $contact->speciality }}</td>
      <td>{{ $contact->mob_tel }}</td>
      <td>{{ $contact->email }}</td>
      <td>{{ $contact->groupe }}</td>
    </tr>
    @endforeach

  </tbody>
</table>
</div>
