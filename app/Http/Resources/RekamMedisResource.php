<?php

namespace App\Http\Resources;

use Illuminate\Http\Request;
use Illuminate\Http\Resources\Json\JsonResource;

class RekamMedisResource extends JsonResource
{
    /**
     * Transform the resource into an array.
     *
     * @return array<string, mixed>
     */
    public function toArray(Request $request): array
    {
        return parent::toArray($request);
        return [
            // 'id' => $this->id,
            // 'tanggal_kunjungan' => $this->tanggal_kunjungan,
            // 'diagnosa' => $this->dx,
            // 'tindakan' => $this->tx,
            // 'keterangan' => $this->keterangan,
            // 'pasien' => $this->datapasien,
        ];
    }
}
