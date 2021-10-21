<?php
use Diglactic\Breadcrumbs\Breadcrumbs;
use Diglactic\Breadcrumbs\Generator as BreadcrumbTrail;

// Home
Breadcrumbs::for('inicio', function (BreadcrumbTrail $trail) {
    $trail->push('Inicio', route('dashboard'));
});

Breadcrumbs::for('reportes', function (BreadcrumbTrail $trail, $mercadoSeleccionado) {
    $trail->parent('inicio');
    $trail->push('Reportes');
});

Breadcrumbs::for('asignaciones', function (BreadcrumbTrail $trail, $estudio, $periodo) {
    $trail->parent('inicio');
    $trail->push(sprintf("%s (%s)", $estudio->name, $periodo->name), route('asignacions.index', [$estudio->id, $periodo->periodo_id]));
});

Breadcrumbs::for('asignacion', function (BreadcrumbTrail $trail, $asignacion) {
    $trail->parent('asignaciones', $asignacion->estudio, $asignacion->periodo);
    $trail->push($asignacion->id, route('asignacions.listar', $asignacion->id));
});

Breadcrumbs::for('ejecutivo', function (BreadcrumbTrail $trail, $asignacionfinal, $rutejecutivo) {
    $trail->parent('asignacion', $asignacionfinal);
    $trail->push($rutejecutivo, route('asignacions.ejecutivoevaluaciones', [$asignacionfinal->id, $rutejecutivo]));
});

Breadcrumbs::for('evaluacion', function (BreadcrumbTrail $trail, $asignacionfinal, $rutejecutivo) {
    $trail->parent('asignacion', $asignacionfinal);
    $trail->push($rutejecutivo, route('asignacions.ejecutivoevaluaciones', [$asignacionfinal->id, $rutejecutivo]));
});

