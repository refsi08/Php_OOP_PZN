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

    /**
     * Magic Function
     * __toString() -> membuat object menjadi string
     */

    public function __toString()
    {
        return "Student id : $this->id, name : $this->name, value: $this->value";
    }

    /**
     * Magic Function
     * __invoke()
     */

    public function __invoke(...$arguments): void
    {
        $join = join(",", $arguments);
        echo "Invoke student with arguments $join" . PHP_EOL;
    }

    /**
     * Magic Function
     * __invoke()
     */

    public function __debugInfo()
    {
        return [
            "id" => $this->id,
            "name" => $this->name,
            "value" => $this->value,
            "sample" => $this->sample,
            "author" => "Eko",
            "version" => "1.0.0",
        ];
    }
}
