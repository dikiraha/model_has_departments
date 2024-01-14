<?php
 
namespace dikiraha\ModelHasDepartment;
 
/**
 * Basic Calculator.
 * 
 */
class ModelHasDepartment
{
    /**
     * Menjumlahkan semua data dalam sebuah array.
     *
     * @param array $data
     * @return integer
     */
    public function departments(): BelongsToMany
    {
        return $this->belongsToMany(Department::class, 'public.model_has_departments', 'model_id', 'department_id');
    }

    public function users(): BelongsToMany
    {
        return $this->belongsToMany(User::class, 'model_has_departments', 'department_id', 'model_id');
    }

    public static function penjumlahan(array $data)
    {
        return array_sum($data);
    }

}