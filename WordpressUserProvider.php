<?php

namespace Statamic\Addons\WordpressAuthenticator;

use Statamic\Extensions\FileUserProvider;
use Illuminate\Contracts\Auth\Authenticatable;
use Hautelook\Phpass\PasswordHash;

class WordpressUserProvider extends FileUserProvider
{
    /**
     * Validate a user against the given credentials.
     *
     * @param  \Illuminate\Contracts\Auth\Authenticatable $user
     * @param  array                                      $credentials
     * @return bool
     */
    public function validateCredentials(Authenticatable $user, array $credentials)
    {
        return parent::validateCredentials($user, $credentials) ||
               $this->validateWordpressCredentials($user, $credentials);
    }

    private function validateWordpressCredentials(Authenticatable $user, array $credentials)
    {
        if (empty($wp_hasher)) {
          $wp_hasher = new PasswordHash(8, TRUE);
        }

        $plain_password = $credentials['password'];
        $hashed_pw = $user->get('password_hash');
        return $wp_hasher->CheckPassword($plain_password, $hashed_pw);
    }
}
