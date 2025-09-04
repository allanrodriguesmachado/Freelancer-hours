<?php

namespace App;

enum ProjectStatus: string
{
    case Open = 'pending';
    case Progress = 'in_progress';
    case Closed = 'completed';

    public function label(): string {
        return match ($this) {
          self::Open => 'Aceitando Propostas',
          self::Progress => 'Em precesso',
          self::Closed => 'Fechado',
        };
    }
}
