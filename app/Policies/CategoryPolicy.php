<?php

namespace App\Policies;

use App\Models\User;
use App\Models\Category;

class CategoryPolicy
{
    public function view(User $user, Category $category)
    {
        // Implement your logic to check if the user can view the category
        return true; // For example, allow everyone for demonstration purposes
    }
}
