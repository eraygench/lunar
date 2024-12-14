<?php

namespace Lunar\Admin\Filament\Widgets\Dashboard\Orders;

use Filament\Tables\Columns\TextColumn;
use Filament\Tables\Table;
use Filament\Widgets\TableWidget;
use Lunar\Facades\DB;
use Lunar\Models\OrderLine;

class PopularProductsTable extends TableWidget
{
    protected int|string|array $columnSpan = 'full';

    protected function getTablePollingInterval(): ?string
    {
        return '60s';
    }

    public static function getHeading(): ?string
    {
        return __('lunarpanel::widgets.dashboard.latest_orders.heading');
    }

    public function table(Table $table): Table
    {
        return $table
            ->heading(
                fn () => __('lunarpanel::widgets.dashboard.orders.popular_products.heading')
            )
            ->description(
                fn () => __('lunarpanel::widgets.dashboard.orders.popular_products.description')
            )
            ->emptyStateHeading(
                fn () => __('lunarpanel::widgets.dashboard.orders.popular_products.empty_state.label')
            )
            ->emptyStateDescription(
                fn () => __('lunarpanel::widgets.dashboard.orders.popular_products.empty_state.description')
            )
            ->query(function () {
                return OrderLine::query()->whereHas('order', function ($relation) {
                    $relation->whereBetween('placed_at', [
                        now()->subYear()->startOfDay(),
                        now()->endOfDay(),
                    ]);
                })->select(
                    DB::RAW('MAX(id) as id'),
                    DB::RAW('COUNT(id) as quantity'),
                    DB::RAW('SUM(sub_total) as sub_total'),
                    DB::RAW('MAX(description) as description'),
                    'identifier',
                )->groupBy('identifier', 'purchasable_id')
                    ->whereType('physical');
            })->defaultSort('quantity', 'desc')
            ->columns([
                TextColumn::make('description')
                    ->label(__('lunarpanel::widgets.dashboard.orders.popular_products.table.description.label')),
                TextColumn::make('identifier')
                    ->label(__('lunarpanel::widgets.dashboard.orders.popular_products.table.identifier.label')),
                TextColumn::make('quantity')
                    ->label(__('lunarpanel::widgets.dashboard.orders.popular_products.table.quantity.label')),
                TextColumn::make('sub_total')
                    ->label(__('lunarpanel::widgets.dashboard.orders.popular_products.table.sub_total.label'))
                    ->formatStateUsing(fn ($state): string => $state->formatted),
            ]);
    }
}
