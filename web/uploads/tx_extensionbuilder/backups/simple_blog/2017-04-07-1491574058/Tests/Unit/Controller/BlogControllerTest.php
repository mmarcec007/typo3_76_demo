<?php
namespace Twofour\SimpleBlog\Tests\Unit\Controller;

/**
 * Test case.
 *
 * @author Mark Marcec <mmarcec007@gmail.com>
 */
class BlogControllerTest extends \TYPO3\CMS\Core\Tests\UnitTestCase
{
    /**
     * @var \Twofour\SimpleBlog\Controller\BlogController
     */
    protected $subject = null;

    protected function setUp()
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder(\Twofour\SimpleBlog\Controller\BlogController::class)
            ->setMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown()
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllBlogsFromRepositoryAndAssignsThemToView()
    {

        $allBlogs = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $blogRepository = $this->getMockBuilder(\Twofour\SimpleBlog\Domain\Repository\BlogRepository::class)
            ->setMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $blogRepository->expects(self::once())->method('findAll')->will(self::returnValue($allBlogs));
        $this->inject($this->subject, 'blogRepository', $blogRepository);

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('blogs', $allBlogs);
        $this->inject($this->subject, 'view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenBlogToView()
    {
        $blog = new \Twofour\SimpleBlog\Domain\Model\Blog();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('blog', $blog);

        $this->subject->showAction($blog);
    }

    /**
     * @test
     */
    public function createActionAddsTheGivenBlogToBlogRepository()
    {
        $blog = new \Twofour\SimpleBlog\Domain\Model\Blog();

        $blogRepository = $this->getMockBuilder(\Twofour\SimpleBlog\Domain\Repository\BlogRepository::class)
            ->setMethods(['add'])
            ->disableOriginalConstructor()
            ->getMock();

        $blogRepository->expects(self::once())->method('add')->with($blog);
        $this->inject($this->subject, 'blogRepository', $blogRepository);

        $this->subject->createAction($blog);
    }

    /**
     * @test
     */
    public function editActionAssignsTheGivenBlogToView()
    {
        $blog = new \Twofour\SimpleBlog\Domain\Model\Blog();

        $view = $this->getMockBuilder(\TYPO3\CMS\Extbase\Mvc\View\ViewInterface::class)->getMock();
        $this->inject($this->subject, 'view', $view);
        $view->expects(self::once())->method('assign')->with('blog', $blog);

        $this->subject->editAction($blog);
    }

    /**
     * @test
     */
    public function updateActionUpdatesTheGivenBlogInBlogRepository()
    {
        $blog = new \Twofour\SimpleBlog\Domain\Model\Blog();

        $blogRepository = $this->getMockBuilder(\Twofour\SimpleBlog\Domain\Repository\BlogRepository::class)
            ->setMethods(['update'])
            ->disableOriginalConstructor()
            ->getMock();

        $blogRepository->expects(self::once())->method('update')->with($blog);
        $this->inject($this->subject, 'blogRepository', $blogRepository);

        $this->subject->updateAction($blog);
    }

    /**
     * @test
     */
    public function deleteActionRemovesTheGivenBlogFromBlogRepository()
    {
        $blog = new \Twofour\SimpleBlog\Domain\Model\Blog();

        $blogRepository = $this->getMockBuilder(\Twofour\SimpleBlog\Domain\Repository\BlogRepository::class)
            ->setMethods(['remove'])
            ->disableOriginalConstructor()
            ->getMock();

        $blogRepository->expects(self::once())->method('remove')->with($blog);
        $this->inject($this->subject, 'blogRepository', $blogRepository);

        $this->subject->deleteAction($blog);
    }
}
