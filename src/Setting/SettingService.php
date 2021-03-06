<?php

declare(strict_types=1);

namespace Alpabit\ApiSkeleton\Setting;

use Alpabit\ApiSkeleton\Pagination\AliasHelper;
use Alpabit\ApiSkeleton\Service\AbstractService;
use Alpabit\ApiSkeleton\Service\Model\ServiceInterface;
use Alpabit\ApiSkeleton\Setting\Model\SettingInterface;
use Alpabit\ApiSkeleton\Setting\Model\SettingRepositoryInterface;

/**
 * @author Muhamad Surya Iksanudin<surya.iksanudin@alpabit.com>
 */
final class SettingService extends AbstractService implements ServiceInterface
{
    public function __construct(SettingRepositoryInterface $repository, AliasHelper $aliasHelper)
    {
        parent::__construct($repository, $aliasHelper);
    }

    public function getSetting(string $key): SettingInterface
    {
        if ($setting = $this->repository->findByParameter($key)) {
            return $setting;
        }

        throw new SettingNotFoundException();
    }
}
