<?php
namespace Blogger\BlogBundle\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Blogger\BlogBundle\Entity\Blog;
use Blogger\BlogBundle\Form\BlogType;

/**
 * Blog controller.
 */
class BlogController extends Controller
{
	/**
	 * Show a blog entry
	 */
	public function showAction($id)
	{
		$em = $this->getDoctrine()->getManager();

		$blog = $em->getRepository('BloggerBlogBundle:Blog')->find($id);

		if (!$blog) {
			throw $this->createNotFoundException('Unable to find Blog post.');
		}
		
		$comments = $em->getRepository('BloggerBlogBundle:Comment')
		->getCommentsForBlog($blog->getId());
		
		return $this->render('BloggerBlogBundle:Blog:show.html.twig', array(
				'active' => 'home',
				'blog'      => $blog,
				'comments'  => $comments
		));
	}
	
	/**
	 * Used only to show form on blog show section
	 */
	public function newAction()
	{
		$blog = new Blog();
		$form   = $this->createForm(BlogType::class, $blog);

		return $this->render('BloggerBlogBundle:Blog:form.html.twig', array(
				'form'   => $form->createView()
		));
	}

	/**
	 * Create blog post
	 */
	public function createAction()
	{

		$blog  = new Blog();
		$request = $this->getRequest();
		$form    = $this->createForm(BlogType::class, $blog);
		$form->handleRequest($request);

		if ($form->isValid()) {
            $em = $this->getDoctrine()
                       ->getManager();
            $em->persist($blog);
            $em->flush();

            return $this->redirect($this->generateUrl('BloggerBlogBundle_homepage'));
        }

		return $this->render('BloggerBlogBundle:Blog:create.html.twig', array(
				'active'  => 'home',
				'form'    => $form->createView()
		));
	}
}