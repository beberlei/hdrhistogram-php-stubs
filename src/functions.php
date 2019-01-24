<?php

/**
 * Create a new histogram resource within the given bounds of trackable values and the precision defined by significant values.
 *
 * @return resource
 */
function hdr_init(int $lowestTrackableValue, int $highestTrackableValue, int $significantValues)
{
}

/**
 * Calculates the required memory size (C) for the given histogram, excluding the PHP overhead for zval and resource representation.
 *
 * @param resource $hdr
 */
function hdr_get_memory_size($hdr): int
{
}

/**
 * Estimate the mean of the given histogram.
 *
 * @param resource $hdr
 */
function hdr_mean($hdr): int
{
}

/**
 * Estimate the standard deviation of the given histogram.
 *
 * @param resource $hdr
 */
function hdr_stddev($hdr): float
{
}

/**
 * Retrieve the minimal value of the given histogram.
 *
 * @param resource $hdr
 */
function hdr_min($hdr): int
{
}

/**
 * Retrieve the maximum value of the given histogram.
 *
 * @param resource $hdr
 */
function hdr_max($hdr): int
{
}

/**
 * Record a value (integer) for the given histogram.
 * Returns false if the value is larger than the highest_trackable_value and can't be recorded, true otherwise.
 *
 * @param resource $hdr
 */
function hdr_record_value($hdr, int $value): bool
{
}

/**
 * Record a value (integer) for $count number of times in the given histogram.
 * Returns false if the value is larger than the highest_trackable_value and can't be recorded, true otherwise.
 *
 * @param resource $hdr
 */
function hdr_record_values($hdr, int $value, int $count): bool
{
}

/**
 * Record a value in the histogram and backfill based on an expected interval.
 * Records a value in the histogram, will round this value of to a precision at or better than the significant_figure specified at contruction time.
 * This is specifically used for recording latency. If the value is larger than the expected_interval then the latency recording system has experienced co-ordinated omission.
 * This method fills in the values that would have occured had the client providing the load not been blocked.
 *
 * @param resource $hdr
 */
function hdr_record_corrected_value($hdr, int $value, int $expected_interval): bool
{
}

/**
 * Drop all recorded values of the given histogram.
 *
 * @param resource $hdr
 */
function hdr_reset($hdr)
{
}

/**
 * Get the count of recorded values at a specific value (to within the histogram resolution at the value level).
 *
 * @param resource $hdr
 */
function hdr_count_at_value($hdr, int $value): int
{
}

/**
 * Get the value at a specific percentile.
 *
 * @param resource $hdr
 */
function hdr_value_at_percentile($hdr, float $percentile): int
{
}

/**
 * Adds all of the values from 'from' to 'to' histogram and create a new histogram as return value.
 * $to will not be modified. Values will be dropped if they around outside of h.lowest_trackable_value and h.highest_trackable_value.
 *
 * @param resource $to
 * @param resource $from
 * @return resource
 */
function hdr_add($to, $from)
{
}

/**
 * Mutable version of hdr_add, modifiying the $to histogram.
 *
 * @param resource $to
 * @param resource $from
 */
function hdr_merge_into($to, $from): int
{
}

/**
 * Initializes the basic iterator for given histogram.
 *
 * @param resource $hdr
 * @return resource
 */
function hdr_iter_init($hdr)
{
}


/**
 * Iterate to the next value for the iterator. If there are no more values available return false.
 * Returns array with keys value, count_at_index, count_to_index, highest_equivalent_value.
 *
 * @param resource $iter
 * @return array|false
 */
function hdr_iter_next($iter)
{
}

/**
 * Initializes the percentile iterator for given histogram.
 *
 * @param resource $hdr
 * @return resource
 */
function hdr_percentile_iter_init($hdr, int $ticks_per_half_distance)
{
}

/**
 * Returns array with keys value, count_at_index, count_to_index, highest_equivalent_value, seen_last_value, ticks_per_half_distance, percentile_to_iterate_to, percentile.
 *
 * @return array|false
 */
function hdr_percentile_iter_next(resouce $iter)
{
}

/**
 * Export array into a serializable array format.
 *
 * @param resource $hdr
 * @return array|false
 */
function hdr_export($hdr)
{
}

/**
 * Import and create HDR histogram from serializable array data format that is created by hdr_export.
 *
 * @return resource
 */
function hdr_import(array $data)
{
}

/**
 * returns number of stored values
 *
 * @param resource $hdr
 * @return int
 */
function hdr_total_count($hdr)
{
}
