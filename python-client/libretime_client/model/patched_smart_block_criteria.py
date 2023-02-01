# coding: utf-8

"""
    LibreTime API

    Radio Broadcast & Automation Platform  # noqa: E501

    The version of the OpenAPI document: 2.0.0
    Generated by: https://openapi-generator.tech
"""

from datetime import date, datetime  # noqa: F401
import decimal  # noqa: F401
import functools  # noqa: F401
import io  # noqa: F401
import re  # noqa: F401
import typing  # noqa: F401
import typing_extensions  # noqa: F401
import uuid  # noqa: F401

import frozendict  # noqa: F401

from libretime_client import schemas  # noqa: F401


class PatchedSmartBlockCriteria(
    schemas.DictSchema
):
    """NOTE: This class is auto generated by OpenAPI Generator.
    Ref: https://openapi-generator.tech

    Do not edit the class manually.
    """


    class MetaOapg:
        
        class properties:
            id = schemas.IntSchema
            
            
            class group(
                schemas.IntBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneDecimalMixin
            ):
            
            
                class MetaOapg:
                    inclusive_maximum = 2147483647
                    inclusive_minimum = -2147483648
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, decimal.Decimal, int, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'group':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            
            
            class criteria(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 32
            
            
            class condition(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 16
            
            
            class value(
                schemas.StrSchema
            ):
            
            
                class MetaOapg:
                    max_length = 512
            
            
            class extra(
                schemas.StrBase,
                schemas.NoneBase,
                schemas.Schema,
                schemas.NoneStrMixin
            ):
            
            
                class MetaOapg:
                    max_length = 512
            
            
                def __new__(
                    cls,
                    *_args: typing.Union[None, str, ],
                    _configuration: typing.Optional[schemas.Configuration] = None,
                ) -> 'extra':
                    return super().__new__(
                        cls,
                        *_args,
                        _configuration=_configuration,
                    )
            block = schemas.IntSchema
            __annotations__ = {
                "id": id,
                "group": group,
                "criteria": criteria,
                "condition": condition,
                "value": value,
                "extra": extra,
                "block": block,
            }
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["id"]) -> MetaOapg.properties.id: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["group"]) -> MetaOapg.properties.group: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["criteria"]) -> MetaOapg.properties.criteria: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["condition"]) -> MetaOapg.properties.condition: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["value"]) -> MetaOapg.properties.value: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["extra"]) -> MetaOapg.properties.extra: ...
    
    @typing.overload
    def __getitem__(self, name: typing_extensions.Literal["block"]) -> MetaOapg.properties.block: ...
    
    @typing.overload
    def __getitem__(self, name: str) -> schemas.UnsetAnyTypeSchema: ...
    
    def __getitem__(self, name: typing.Union[typing_extensions.Literal["id", "group", "criteria", "condition", "value", "extra", "block", ], str]):
        # dict_instance[name] accessor
        return super().__getitem__(name)
    
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["id"]) -> typing.Union[MetaOapg.properties.id, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["group"]) -> typing.Union[MetaOapg.properties.group, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["criteria"]) -> typing.Union[MetaOapg.properties.criteria, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["condition"]) -> typing.Union[MetaOapg.properties.condition, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["value"]) -> typing.Union[MetaOapg.properties.value, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["extra"]) -> typing.Union[MetaOapg.properties.extra, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: typing_extensions.Literal["block"]) -> typing.Union[MetaOapg.properties.block, schemas.Unset]: ...
    
    @typing.overload
    def get_item_oapg(self, name: str) -> typing.Union[schemas.UnsetAnyTypeSchema, schemas.Unset]: ...
    
    def get_item_oapg(self, name: typing.Union[typing_extensions.Literal["id", "group", "criteria", "condition", "value", "extra", "block", ], str]):
        return super().get_item_oapg(name)
    

    def __new__(
        cls,
        *_args: typing.Union[dict, frozendict.frozendict, ],
        id: typing.Union[MetaOapg.properties.id, decimal.Decimal, int, schemas.Unset] = schemas.unset,
        group: typing.Union[MetaOapg.properties.group, None, decimal.Decimal, int, schemas.Unset] = schemas.unset,
        criteria: typing.Union[MetaOapg.properties.criteria, str, schemas.Unset] = schemas.unset,
        condition: typing.Union[MetaOapg.properties.condition, str, schemas.Unset] = schemas.unset,
        value: typing.Union[MetaOapg.properties.value, str, schemas.Unset] = schemas.unset,
        extra: typing.Union[MetaOapg.properties.extra, None, str, schemas.Unset] = schemas.unset,
        block: typing.Union[MetaOapg.properties.block, decimal.Decimal, int, schemas.Unset] = schemas.unset,
        _configuration: typing.Optional[schemas.Configuration] = None,
        **kwargs: typing.Union[schemas.AnyTypeSchema, dict, frozendict.frozendict, str, date, datetime, uuid.UUID, int, float, decimal.Decimal, None, list, tuple, bytes],
    ) -> 'PatchedSmartBlockCriteria':
        return super().__new__(
            cls,
            *_args,
            id=id,
            group=group,
            criteria=criteria,
            condition=condition,
            value=value,
            extra=extra,
            block=block,
            _configuration=_configuration,
            **kwargs,
        )
