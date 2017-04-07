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
}
