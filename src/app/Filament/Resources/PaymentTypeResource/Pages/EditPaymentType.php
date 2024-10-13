<?php

namespace App\Filament\Resources\PaymentTypeResource\Pages;

use App\Filament\Resources\PaymentTypeResource;
use Filament\Actions;
use Filament\Resources\Pages\EditRecord;
use App\Models\Language;
use Illuminate\Database\Eloquent\Model;
use App\Models\Catalog\PaymentType;

class EditPaymentType extends EditRecord
{
    protected static string $resource = PaymentTypeResource::class;

    protected function getHeaderActions(): array
    {
        return [
            Actions\DeleteAction::make(),
        ];
    }

    protected function mutateFormDataBeforeFill(array $data): array
    {
        $type = PaymentType::find($data['id']);
        $languages = Language::where('active', true)->get();

        foreach ($languages as $language) {
            $translation = $type->translations->where('language_id', $language->id)->first();
            $data['translations'][$language->code] = [
                'name' => $translation->name ?? null,
                'language_id' => $language->id,
            ];
        }
    
        return $data;
    }

    protected function handleRecordUpdate(Model $type, array $data): Model
    {
        $type->update([
            'code' => $data['code'],
            'active' => $data['active'],
            'guid' => $data['guid'] ?? null,
            'id_1c' => $data['id_1c'] ?? null,
        ]);

        foreach ($data['translations'] as $translation) {
            $updates = [
                'name' => $translation['name'],
            ];
            $typeTranslation = $type->translations()
                ->where('language_id', $translation['language_id'])
                ->first();

            if (!$typeTranslation) {
                $updates['language_id'] = $translation['language_id'];
                $typeTranslation = $type->translations()->create($updates);
            } else {
                $typeTranslation->update($updates);
            }
        }

        return $type;
    }
}
