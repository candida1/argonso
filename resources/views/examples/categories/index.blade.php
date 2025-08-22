@extends('layouts.panel')
@section('title', 'Category')

@section('content')
    <div class="row">
        <div class="col">
            <div class="card shadow">
                <div class="card-header border-0">
                    <div class="d-flex justify-content-between align-items-center">
                        <h3 class="mb-0">Categories</h3>
                        <x-link href="{{ route('categories.create') }}" variant="primary" icon="fas fa-plus"
                            text="Nueva Categoria" can="create categories" />
                    </div>
                </div>
                <x-table>
                    <x-slot name="thead">
                        <tr>
                            <th scope="col"><i class="fas fa-list-ol"></i> ID</th>
                            <th scope="col"><i class="fas fa-heading"></i> Nombre</th>
                            <th scope="col"><i class="fas fa-heading"></i> Description</th>
                            <th scope="col"><i class="fas fa-list-ol"></i> Slug</th>
                            <th scope="col"><i class="fas fa-calendar-check"></i> Fecha de Registro</th>
                            <th scope="col"><i class="fas fa-cogs"></i> Acciones</th>
                        </tr>
                    </x-slot>
                    <x-slot name="tbody">
                        @foreach ($categories as $category)
                            <tr>
                                <x-table.td>
                                    <x-welcome.badge color="primary" :text="$category->id" />
                                </x-table.td>
                                <x-table.td>
                                    {{ $category->name }}
                                </x-table.td>
                                <x-table.td>
                                    {{ $category->description }}
                                </x-table.td>

                                <x-table.td>
                                    {{ $category->slug }}
                                </x-table.td>
                                <x-table.td>
                                    {{ $category->created_at->format('d/m/Y') }}
                                </x-table.td>

                                <x-table.td styleType="action">
                                    <x-link href="{{ route('categories.show', $category) }}" variant="primary" icon="fas fa-eye"
                                        text="Mostrar" size="sm" can="read categories" />

                                    <x-link href="{{ route('categories.edit', $category) }}" variant="info" icon="fas fa-edit"
                                        text="Editar" size="sm" can="update categories" />

                                    <x-delete-button :route="route('categories.destroy', $category)" icon="fas fa-trash"
                                        text="Eliminar" can="destroy categories" />
                                </x-table.td>
                            </tr>
                        @endforeach
                    </x-slot>
                </x-table>
                <x-pagination :links="$categories->links()" />
            </div>
        </div>
    </div>
@endsection
