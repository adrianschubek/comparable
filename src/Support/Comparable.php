<?php


interface Comparable
{
    /**
     * Checks whether a given object is smaller, equal or bigger than another.
     * <ul>
     * <li>-1 = smaller than $other</li>
     * <li>0 = equal</li>
     * <li>1 = greater than $other</li>
     * </ul>
     * @param Comparable $other
     * @return -1, 0 or 1
     *
     */
    function compareTo(Comparable $other): int;
}