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


import globalAxios, { AxiosPromise, AxiosInstance, AxiosRequestConfig } from 'axios';
import { Configuration } from '../configuration';
// Some imports not used depending on template conditions
// @ts-ignore
import { DUMMY_BASE_URL, assertParamExists, setApiKeyToObject, setBasicAuthToObject, setBearerAuthToObject, setOAuthToObject, setSearchParams, serializeDataIfNeeded, toPathString, createRequestFunction } from '../common';
// @ts-ignore
import { BASE_PATH, COLLECTION_FORMATS, RequestArgs, BaseAPI, RequiredError } from '../base';
// @ts-ignore
import { PatchedWebstreamMetadata } from '../model';
// @ts-ignore
import { WebstreamMetadata } from '../model';
/**
 * WebstreamMetadataApi - axios parameter creator
 * @export
 */
export const WebstreamMetadataApiAxiosParamCreator = function (configuration?: Configuration) {
    return {
        /**
         * 
         * @param {WebstreamMetadata} webstreamMetadata 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataCreate: async (webstreamMetadata: WebstreamMetadata, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'webstreamMetadata' is not null or undefined
            assertParamExists('webstreamMetadataCreate', 'webstreamMetadata', webstreamMetadata)
            const localVarPath = `/api/v2/webstream-metadata/`;
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'POST', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            localVarRequestOptions.data = serializeDataIfNeeded(webstreamMetadata, localVarRequestOptions, configuration)

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataDestroy: async (id: number, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('webstreamMetadataDestroy', 'id', id)
            const localVarPath = `/api/v2/webstream-metadata/{id}/`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'DELETE', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataList: async (options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            const localVarPath = `/api/v2/webstream-metadata/`;
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {PatchedWebstreamMetadata} [patchedWebstreamMetadata] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataPartialUpdate: async (id: number, patchedWebstreamMetadata?: PatchedWebstreamMetadata, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('webstreamMetadataPartialUpdate', 'id', id)
            const localVarPath = `/api/v2/webstream-metadata/{id}/`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'PATCH', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            localVarRequestOptions.data = serializeDataIfNeeded(patchedWebstreamMetadata, localVarRequestOptions, configuration)

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataRetrieve: async (id: number, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('webstreamMetadataRetrieve', 'id', id)
            const localVarPath = `/api/v2/webstream-metadata/{id}/`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'GET', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {WebstreamMetadata} webstreamMetadata 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataUpdate: async (id: number, webstreamMetadata: WebstreamMetadata, options: AxiosRequestConfig = {}): Promise<RequestArgs> => {
            // verify required parameter 'id' is not null or undefined
            assertParamExists('webstreamMetadataUpdate', 'id', id)
            // verify required parameter 'webstreamMetadata' is not null or undefined
            assertParamExists('webstreamMetadataUpdate', 'webstreamMetadata', webstreamMetadata)
            const localVarPath = `/api/v2/webstream-metadata/{id}/`
                .replace(`{${"id"}}`, encodeURIComponent(String(id)));
            // use dummy base URL string because the URL constructor only accepts absolute URLs.
            const localVarUrlObj = new URL(localVarPath, DUMMY_BASE_URL);
            let baseOptions;
            if (configuration) {
                baseOptions = configuration.baseOptions;
            }

            const localVarRequestOptions = { method: 'PUT', ...baseOptions, ...options};
            const localVarHeaderParameter = {} as any;
            const localVarQueryParameter = {} as any;

            // authentication basicAuth required
            // http basic authentication required
            setBasicAuthToObject(localVarRequestOptions, configuration)

            // authentication cookieAuth required


    
            localVarHeaderParameter['Content-Type'] = 'application/json';

            setSearchParams(localVarUrlObj, localVarQueryParameter);
            let headersFromBaseOptions = baseOptions && baseOptions.headers ? baseOptions.headers : {};
            localVarRequestOptions.headers = {...localVarHeaderParameter, ...headersFromBaseOptions, ...options.headers};
            localVarRequestOptions.data = serializeDataIfNeeded(webstreamMetadata, localVarRequestOptions, configuration)

            return {
                url: toPathString(localVarUrlObj),
                options: localVarRequestOptions,
            };
        },
    }
};

/**
 * WebstreamMetadataApi - functional programming interface
 * @export
 */
export const WebstreamMetadataApiFp = function(configuration?: Configuration) {
    const localVarAxiosParamCreator = WebstreamMetadataApiAxiosParamCreator(configuration)
    return {
        /**
         * 
         * @param {WebstreamMetadata} webstreamMetadata 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async webstreamMetadataCreate(webstreamMetadata: WebstreamMetadata, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<WebstreamMetadata>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.webstreamMetadataCreate(webstreamMetadata, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async webstreamMetadataDestroy(id: number, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<void>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.webstreamMetadataDestroy(id, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async webstreamMetadataList(options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<Array<WebstreamMetadata>>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.webstreamMetadataList(options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {PatchedWebstreamMetadata} [patchedWebstreamMetadata] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async webstreamMetadataPartialUpdate(id: number, patchedWebstreamMetadata?: PatchedWebstreamMetadata, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<WebstreamMetadata>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.webstreamMetadataPartialUpdate(id, patchedWebstreamMetadata, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async webstreamMetadataRetrieve(id: number, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<WebstreamMetadata>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.webstreamMetadataRetrieve(id, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {WebstreamMetadata} webstreamMetadata 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        async webstreamMetadataUpdate(id: number, webstreamMetadata: WebstreamMetadata, options?: AxiosRequestConfig): Promise<(axios?: AxiosInstance, basePath?: string) => AxiosPromise<WebstreamMetadata>> {
            const localVarAxiosArgs = await localVarAxiosParamCreator.webstreamMetadataUpdate(id, webstreamMetadata, options);
            return createRequestFunction(localVarAxiosArgs, globalAxios, BASE_PATH, configuration);
        },
    }
};

/**
 * WebstreamMetadataApi - factory interface
 * @export
 */
export const WebstreamMetadataApiFactory = function (configuration?: Configuration, basePath?: string, axios?: AxiosInstance) {
    const localVarFp = WebstreamMetadataApiFp(configuration)
    return {
        /**
         * 
         * @param {WebstreamMetadata} webstreamMetadata 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataCreate(webstreamMetadata: WebstreamMetadata, options?: any): AxiosPromise<WebstreamMetadata> {
            return localVarFp.webstreamMetadataCreate(webstreamMetadata, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataDestroy(id: number, options?: any): AxiosPromise<void> {
            return localVarFp.webstreamMetadataDestroy(id, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataList(options?: any): AxiosPromise<Array<WebstreamMetadata>> {
            return localVarFp.webstreamMetadataList(options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {PatchedWebstreamMetadata} [patchedWebstreamMetadata] 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataPartialUpdate(id: number, patchedWebstreamMetadata?: PatchedWebstreamMetadata, options?: any): AxiosPromise<WebstreamMetadata> {
            return localVarFp.webstreamMetadataPartialUpdate(id, patchedWebstreamMetadata, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataRetrieve(id: number, options?: any): AxiosPromise<WebstreamMetadata> {
            return localVarFp.webstreamMetadataRetrieve(id, options).then((request) => request(axios, basePath));
        },
        /**
         * 
         * @param {number} id A unique integer value identifying this webstream metadata.
         * @param {WebstreamMetadata} webstreamMetadata 
         * @param {*} [options] Override http request option.
         * @throws {RequiredError}
         */
        webstreamMetadataUpdate(id: number, webstreamMetadata: WebstreamMetadata, options?: any): AxiosPromise<WebstreamMetadata> {
            return localVarFp.webstreamMetadataUpdate(id, webstreamMetadata, options).then((request) => request(axios, basePath));
        },
    };
};

/**
 * WebstreamMetadataApi - object-oriented interface
 * @export
 * @class WebstreamMetadataApi
 * @extends {BaseAPI}
 */
export class WebstreamMetadataApi extends BaseAPI {
    /**
     * 
     * @param {WebstreamMetadata} webstreamMetadata 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof WebstreamMetadataApi
     */
    public webstreamMetadataCreate(webstreamMetadata: WebstreamMetadata, options?: AxiosRequestConfig) {
        return WebstreamMetadataApiFp(this.configuration).webstreamMetadataCreate(webstreamMetadata, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this webstream metadata.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof WebstreamMetadataApi
     */
    public webstreamMetadataDestroy(id: number, options?: AxiosRequestConfig) {
        return WebstreamMetadataApiFp(this.configuration).webstreamMetadataDestroy(id, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof WebstreamMetadataApi
     */
    public webstreamMetadataList(options?: AxiosRequestConfig) {
        return WebstreamMetadataApiFp(this.configuration).webstreamMetadataList(options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this webstream metadata.
     * @param {PatchedWebstreamMetadata} [patchedWebstreamMetadata] 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof WebstreamMetadataApi
     */
    public webstreamMetadataPartialUpdate(id: number, patchedWebstreamMetadata?: PatchedWebstreamMetadata, options?: AxiosRequestConfig) {
        return WebstreamMetadataApiFp(this.configuration).webstreamMetadataPartialUpdate(id, patchedWebstreamMetadata, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this webstream metadata.
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof WebstreamMetadataApi
     */
    public webstreamMetadataRetrieve(id: number, options?: AxiosRequestConfig) {
        return WebstreamMetadataApiFp(this.configuration).webstreamMetadataRetrieve(id, options).then((request) => request(this.axios, this.basePath));
    }

    /**
     * 
     * @param {number} id A unique integer value identifying this webstream metadata.
     * @param {WebstreamMetadata} webstreamMetadata 
     * @param {*} [options] Override http request option.
     * @throws {RequiredError}
     * @memberof WebstreamMetadataApi
     */
    public webstreamMetadataUpdate(id: number, webstreamMetadata: WebstreamMetadata, options?: AxiosRequestConfig) {
        return WebstreamMetadataApiFp(this.configuration).webstreamMetadataUpdate(id, webstreamMetadata, options).then((request) => request(this.axios, this.basePath));
    }
}