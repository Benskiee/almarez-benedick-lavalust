<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

 
class StudentMiddlewareMiddleware
{
    
    public function handle(Closure $next)
    {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
        if (!empty($_SESSION['student_access'])) {
            return $next();
        }
        redirect('student/confirm');
    }
}