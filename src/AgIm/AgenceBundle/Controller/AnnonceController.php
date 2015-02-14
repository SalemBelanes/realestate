<?php

namespace AgIm\AgenceBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use AgIm\AgenceBundle\Entity\Annonce;
use AgIm\AgenceBundle\Entity\Medias;
use AgIm\AgenceBundle\Form\AnnonceType;

/**
 * Annonce controller.
 *
 */
class AnnonceController extends Controller {

    /**
     * Lists all Annonce entities.
     *
     */
    public function indexAction() {
        $em = $this->getDoctrine()->getManager();

        $entities = $em->getRepository('AgImAgenceBundle:Annonce')->findAll();

        return $this->render('AgImAgenceBundle:Annonce:index.html.twig', array(
                    'entities' => $entities,
        ));
    }

    /**
     * Creates a new Annonce entity.
     *
     */
    public function createAction(Request $request) {
        $entity = new Annonce();
        $form = $this->createCreateForm($entity);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($entity);
            $em->flush();
            /*             * **add file*** */
            $data = $form->getData();
            $files = $data->getFiles();
            foreach ($files as $key => $file) {

                $medias = new Medias();
                $someNewFilename = $file->getClientOriginalName();
                $absolute_path = $this->getRequest()->server->get('DOCUMENT_ROOT');
                $dir_upload = $this->container->getParameter('upload_dir');
                $dir_annonce = $this->container->getParameter('upload_annonce');
                $dir_module = $this->container->getParameter('upload_medias');
                $relative_path = $dir_upload . $dir_annonce . $entity->getId() . $dir_module;
                $complet_path = $absolute_path . $relative_path;
                if (!is_dir($complet_path)) {
                    mkdir($complet_path, 0777, true);
                }
                $file->move($complet_path, $someNewFilename);
                $medias->setAlt($someNewFilename);
                $medias->setUrl($relative_path . '/' . $someNewFilename);
                $medias->setAnnonce($entity);
                $em->persist($medias);
            }
            $em->flush();
            /*             * ***************** */
            return $this->redirect($this->generateUrl('annonce_show', array('id' => $entity->getId())));
        }

        return $this->render('AgImAgenceBundle:Annonce:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $form->createView(),
        ));
    }

    /**
     * Creates a form to create a Annonce entity.
     *
     * @param Annonce $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createCreateForm(Annonce $entity) {
        $form = $this->createForm(new AnnonceType(), $entity, array(
            'action' => $this->generateUrl('annonce_create'),
            'method' => 'POST',
        ));

        $form->add('submit', 'submit', array('label' => 'Ajouter'));

        return $form;
    }

    /**
     * Displays a form to create a new Annonce entity.
     *
     */
    public function newAction() {
        $entity = new Annonce();
        $form = $this->createCreateForm($entity);
        $formView = $form->createView();
        $formView->offsetGet('files')->vars['full_name'] = 'Form[files][0]';
        return $this->render('AgImAgenceBundle:Annonce:new.html.twig', array(
                    'entity' => $entity,
                    'form' => $formView,
        ));
    }

    /**
     * Finds and displays a Annonce entity.
     *
     */
    public function showAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgImAgenceBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgImAgenceBundle:Annonce:show.html.twig', array(
                    'entity' => $entity,
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Annonce entity.
     *
     */
    public function editAction($id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgImAgenceBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $editForm = $this->createEditForm($entity);
        $deleteForm = $this->createDeleteForm($id);

        return $this->render('AgImAgenceBundle:Annonce:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Creates a form to edit a Annonce entity.
     *
     * @param Annonce $entity The entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createEditForm(Annonce $entity) {
        $form = $this->createForm(new AnnonceType(), $entity, array(
            'action' => $this->generateUrl('annonce_update', array('id' => $entity->getId())),
            'method' => 'PUT',
        ));

        $form->add('submit', 'submit', array('label' => 'Update'));

        return $form;
    }

    /**
     * Edits an existing Annonce entity.
     *
     */
    public function updateAction(Request $request, $id) {
        $em = $this->getDoctrine()->getManager();

        $entity = $em->getRepository('AgImAgenceBundle:Annonce')->find($id);

        if (!$entity) {
            throw $this->createNotFoundException('Unable to find Annonce entity.');
        }

        $deleteForm = $this->createDeleteForm($id);
        $editForm = $this->createEditForm($entity);
        $editForm->handleRequest($request);

        if ($editForm->isValid()) {
            $em->flush();

            return $this->redirect($this->generateUrl('annonce_edit', array('id' => $id)));
        }

        return $this->render('AgImAgenceBundle:Annonce:edit.html.twig', array(
                    'entity' => $entity,
                    'edit_form' => $editForm->createView(),
                    'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Annonce entity.
     *
     */
    public function deleteAction(Request $request, $id) {
        $form = $this->createDeleteForm($id);
        $form->handleRequest($request);

        if ($form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $entity = $em->getRepository('AgImAgenceBundle:Annonce')->find($id);

            if (!$entity) {
                throw $this->createNotFoundException('Unable to find Annonce entity.');
            }

            $em->remove($entity);
            $em->flush();
        }

        return $this->redirect($this->generateUrl('annonce'));
    }

    /**
     * Creates a form to delete a Annonce entity by id.
     *
     * @param mixed $id The entity id
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm($id) {
        return $this->createFormBuilder()
                        ->setAction($this->generateUrl('annonce_delete', array('id' => $id)))
                        ->setMethod('DELETE')
                        ->add('submit', 'submit', array('label' => 'Delete'))
                        ->getForm()
        ;
    }

}
