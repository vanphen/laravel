<?php

namespace App\Rules;

use Illuminate\Contracts\Validation\Rule;

class objectRule implements Rule
{
    /**
     * Create a new rule instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Determine if the validation rule passes.
     *
     * @param  string  $attribute
     * @param  mixed  $value
     * @return bool
     */
    public function passes($attribute, $value)
    {
        return ((($value % 4 == 0) && ($value % 100!= 0)) || ($value%400 == 0));
    }

    /**
     * Get the validation error message.
     *
     * @return string
     */
    public function message()
    {
        return 'day khong phai la nam nhuan';
    }
}
