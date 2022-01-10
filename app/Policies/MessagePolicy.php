<?php

namespace App\Policies;

use App\Models\Message;
use App\Models\NhanVien;
use Illuminate\Auth\Access\HandlesAuthorization;

class MessagePolicy
{
    use HandlesAuthorization;

    /**
     * Determine whether the user can view any models.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function viewAny(NhanVien $nhanVien)
    {
        //
    }

    /**
     * Determine whether the user can view the model.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function view(NhanVien $nhanVien, Message $message)
    {
        //
    }

    /**
     * Determine whether the user can create models.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function create(NhanVien $nhanVien)
    {
        //
    }

    /**
     * Determine whether the user can update the model.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function update(NhanVien $nhanVien, Message $message)
    {
        //
    }

    /**
     * Determine whether the user can delete the model.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function delete(NhanVien $nhanVien, Message $message)
    {
        //
    }

    /**
     * Determine whether the user can restore the model.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function restore(NhanVien $nhanVien, Message $message)
    {
        //
    }

    /**
     * Determine whether the user can permanently delete the model.
     *
     * @param  \App\Models\NhanVien  $nhanVien
     * @param  \App\Models\Message  $message
     * @return \Illuminate\Auth\Access\Response|bool
     */
    public function forceDelete(NhanVien $nhanVien, Message $message)
    {
        //
    }
}
