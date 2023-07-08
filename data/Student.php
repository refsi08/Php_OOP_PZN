<?php
class Student
{
    public string $id;
    public string $name;
    public int $value;
    private string $sample;

    /**
     * karena properties sample di private jadi harus dibuat method set untuk bisa merubah data
     */
    public function setSample($sample)
    {
        $this->sample = $sample;
    }

    // create function __clone()
    public function __clone()
    {
        unset($this->sample);
    }
}
