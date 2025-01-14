/* tslint:disable */
/* eslint-disable */
/**
 * LibreTime API
 * Radio Broadcast & Automation Platform
 *
 * The version of the OpenAPI document: 2.0.0
 * 
 *
 * NOTE: This class is auto generated by OpenAPI Generator (https://openapi-generator.tech).
 * https://openapi-generator.tech
 * Do not edit the class manually.
 */


// May contain unused imports in some cases
// @ts-ignore
import { PatchedShowDaysRecordEnabled } from './patched-show-days-record-enabled';
// May contain unused imports in some cases
// @ts-ignore
import { PatchedShowDaysWeekDay } from './patched-show-days-week-day';
// May contain unused imports in some cases
// @ts-ignore
import { RepeatKindEnum } from './repeat-kind-enum';

/**
 * 
 * @export
 * @interface ShowDays
 */
export interface ShowDays {
    /**
     * 
     * @type {number}
     * @memberof ShowDays
     */
    'id': number;
    /**
     * 
     * @type {string}
     * @memberof ShowDays
     */
    'first_show_on': string;
    /**
     * 
     * @type {string}
     * @memberof ShowDays
     */
    'last_show_on'?: string | null;
    /**
     * 
     * @type {string}
     * @memberof ShowDays
     */
    'start_time': string;
    /**
     * 
     * @type {string}
     * @memberof ShowDays
     */
    'timezone': string;
    /**
     * 
     * @type {string}
     * @memberof ShowDays
     */
    'duration': string;
    /**
     * 
     * @type {PatchedShowDaysRecordEnabled}
     * @memberof ShowDays
     */
    'record_enabled'?: PatchedShowDaysRecordEnabled | null;
    /**
     * 
     * @type {PatchedShowDaysWeekDay}
     * @memberof ShowDays
     */
    'week_day'?: PatchedShowDaysWeekDay | null;
    /**
     * 
     * @type {RepeatKindEnum}
     * @memberof ShowDays
     */
    'repeat_kind': RepeatKindEnum;
    /**
     * 
     * @type {string}
     * @memberof ShowDays
     */
    'repeat_next_on'?: string | null;
    /**
     * 
     * @type {number}
     * @memberof ShowDays
     */
    'show': number;
}



