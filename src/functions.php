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
 */
function hdr_get_memory_size(resource $hdr): int
{
}

/**
 * Estimate the mean of the given histogram.
*/
function hdr_mean(resource $hdr): int
{
}

/**
 * Estimate the standard deviation of the given histogram.
 */
function hdr_stddev(resource $hdr): float
{
}

/**
 * Retrieve the minimal value of the given histogram.
 */
function hdr_min(resource $hdr): int
{
}

/**
 * Retrieve the maximum value of the given histogram.
 */
function hdr_max(resource $hdr): int
{
}

/**
 * Record a value (integer) for the given histogram.
 * Returns false if the value is larger than the highest_trackable_value and can't be recorded, true otherwise.
 */
function hdr_record_value(resource $hdr, int $value): bool
{
}

/**
 * Record a value (integer) for $count number of times in the given histogram.
 * Returns false if the value is larger than the highest_trackable_value and can't be recorded, true otherwise.
 */
function hdr_record_values(resource $hdr, int $value, int $count): bool
{
}

/**
 * Record a value in the histogram and backfill based on an expected interval.
 * Records a value in the histogram, will round this value of to a precision at or better than the significant_figure specified at contruction time. This is specifically used for recording latency. If the value is larger than the expected_interval then the latency recording system has experienced co-ordinated omission. This method fills in the values that would have occured had the client providing the load not been blocked.
 */
function hdr_record_corrected_value(resource $hdr, int $value, int $expected_interval): bool
{
}

/**
 * Drop all recorded values of the given histogram.
 */
function hdr_reset(resource $hdr)
{
}

/**
 * Get the count of recorded values at a specific value (to within the histogram resolution at the value level).
 */
function hdr_count_at_value(resource $hdr, int $value): int
{
}

/**
 * Get the value at a specific percentile.
 */
function hdr_value_at_percentile(resource $hdr, float $percentile): int
{
}

/**
 * Adds all of the values from 'from' to 'to' histogram and create a new histogram as return value. $to will not be modified. Values will be dropped if they around outside of h.lowest_trackable_value and h.highest_trackable_value.
 *
 * @return resource
 */
function hdr_add(resource $to, resource $from)
{
}

/**
 * Mutable version of hdr_add, modifiying the $to histogram.
 */
function hdr_merge_into(resource $to, resource $from): int
{
}

/**
 * Initializes the basic iterator for given histogram.
 *
 * @return resource
 */
function hdr_iter_init(resource $hdr)
{
}


/**
 * Iterate to the next value for the iterator. If there are no more values available return false.
 * Returns array with keys value, count_at_index, count_to_index, highest_equivalent_value.
 *
 * @return array|false
 */
function hdr_iter_next(resource $iter)
{
}

/**
 * Initializes the percentile iterator for given histogram.
 *
 * @return resource
 */
function hdr_percentile_iter_init(resource $hdr, int $ticks_per_half_distance)
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
 * @return array|false
 */
function hdr_export(resource $hdr)
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
