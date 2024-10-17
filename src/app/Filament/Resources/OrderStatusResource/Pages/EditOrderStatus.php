<?php

namespace App\Filament\Resources\OrderStatusResource\Pages;

use App\Filament\Resources\OrderStatusResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\OrderStatus;

class EditOrderStatus extends EditRecord
{
    protected static string $resource = OrderStatusResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $orderStatus = OrderStatus::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $orderStatus->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'description' => $translation->description ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $orderStatus, array $data): Model
    {
        $orderStatus->update([
            'code' => $data['code'],
            'guid' => $data['guid'] ?? null,
        ]);

        foreach ($data['translations'] as $translation) {
            $updates = [
                'name' => $translation['name'],
                'description' => $translation['description'] ?? null,
            ];
            $orderStatusTranslation = $orderStatus->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$orderStatusTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $orderStatusTranslation = $orderStatus->translations()->create($updates);
            } else {
                $orderStatusTranslation->update($updates);
            }
        }

        return $orderStatus;
    }
}
