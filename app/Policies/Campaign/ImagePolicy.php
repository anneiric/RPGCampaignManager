<?php

namespace App\Policies\Campaign;

use App\Models\User;
use App\Models\Campaign;
use App\Policies\BasePolicy;
use App\Models\Campaign\Image;
use Illuminate\Auth\Access\HandlesAuthorization;

class ImagePolicy extends BasePolicy
{
    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function viewAny(User $user)
    {
        return $this->userOwnsCampaign($user);
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Campaign  $campaign
     * @return mixed
     */
    public function view(User $user, Image $image)
    {
        return ($this->userOwnsCampaign($user) && $this->ownedByCampaign($image));
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\User  $user
     * @return mixed
     */
    public function create(User $user)
    {
        return $this->userOwnsCampaign($user);
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Campaign  $campaign
     * @return mixed
     */
    public function update(User $user, Image $image)
    {
       return ($this->userOwnsCampaign($user) && $this->ownedByCampaign($image));
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\User  $user
     * @param  \App\Campaign  $campaign
     * @return mixed
     */
    public function delete(User $user, Image $image)
    {
        return ($this->userOwnsCampaign($user) && $this->ownedByCampaign($image));
    }
}
