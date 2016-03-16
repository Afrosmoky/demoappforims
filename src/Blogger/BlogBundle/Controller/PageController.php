<?php

namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use Blogger\BlogBundle\Entity\Enquiry;
use Blogger\BlogBundle\Form\EnquiryType;

class PageController extends Controller 
{
	public function homeAction()
	{
		$em = $this->getDoctrine()
				   ->getManager();
		
		$blogs = $em->getRepository('BloggerBlogBundle:Blog')
					->getLatestBlogs();
		
		return $this->render('BloggerBlogBundle:Page:home.html.twig', array(
				'active' => 'home', 
				'blogs' => $blogs
		));
	}
	
	public function aboutAction()
	{
		return $this->render('BloggerBlogBundle:Page:about.html.twig', array('active' => 'about'));
	}
}