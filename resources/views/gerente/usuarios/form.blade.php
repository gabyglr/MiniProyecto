@php
    $isEdit = isset($user);
@endphp

<div class="mb-4">
    <label class="block font-semibold">Nombre</label>
    <input type="text" name="name" value="{{ old('name', $isEdit ? $user->name : '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

<div class="mb-4">
    <label class="block font-semibold">Correo electrónico</label>
    <input type="email" name="email" value="{{ old('email', $isEdit ? $user->email : '') }}"
        class="w-full border rounded px-3 py-2" required>
</div>

<div class="mb-4">
    <label class="block font-semibold">Rol</label>
    <select name="role" class="w-full border rounded px-3 py-2" required>
        <option value="Administrador" @selected(old('role', $isEdit ? $user->role : '') === 'Administrador')>Administrador</option>
        <option value="Gerente" @selected(old('role', $isEdit ? $user->role : '') === 'Gerente')>Gerente</option>
        <option value="Cliente" @selected(old('role', $isEdit ? $user->role : '') === 'Cliente')>Cliente</option>
    </select>
</div>

<div class="mb-4">
    <label class="block font-semibold">Contraseña @if($isEdit)<small>(dejar en blanco para no cambiarla)</small>@endif</label>
    <input type="password" name="password" class="w-full border rounded px-3 py-2" @if(!$isEdit) required @endif>
</div>

<div class="mb-4">
    <label class="block font-semibold">Confirmar contraseña</label>
    <input type="password" name="password_confirmation" class="w-full border rounded px-3 py-2" @if(!$isEdit) required @endif>
</div>
